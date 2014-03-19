// remote
function generateHost(name, address, port, documentRoot, remoteAddress, rewriteCond, rewriteRule, serverPath) {
    if (address == '') address = '*';
    if (port == '') port = '80';

    var result = '<VirtualHost ' + address + ':' + port + '>';

    result += '\n\tServerName ' + name;
    result += '\n\tServerAlias www.' + name;

    if (rewriteCond != '' && typeof(rewriteCond) != 'undefined') {
        result += '\n\tRewriteCond ' + rewriteCond;
    }
    if (rewriteRule != '' && typeof(rewriteRule) != 'undefined') {
        result += '\n\tRewriteRule ' + rewriteRule;
    }
    if (documentRoot != '' && typeof(documentRoot) != 'undefined') {
        result += '\n\tDocumentRoot ' + documentRoot;
    }
    if (serverPath != '' && typeof(serverPath) != 'undefined') {
        result += '\n\tServerPath ' + serverPath;
    }

    if (remoteAddress != '' && typeof(remoteAddress) != 'undefined') {
        result += '\n\t<Location />';
        result += '\n\t\tProxyPass ' + remoteAddress;
        result += '\n\t\tProxyPassReverse ' + remoteAddress;
        result += '\n\t</Location>';
    }

    result += '\n</VirtualHost>';
    return result;
}

$(document).ready(function(){

    // add new host
    $('.edit-host input[type="text"]').keyup(function(){
        var name = $('.edit-host input[name="name"]').val();
        var address = $('.edit-host input[name="address"]').val();
        var port = $('.edit-host input[name="port"]').val();
        var remoteAddress = $('.edit-host input[name="remoteAddress"]').val();
        var documentRoot = $('.edit-host input[name="documentRoot"]').val();
        var rewriteCond = $('.edit-host input[name="rewriteCond"]').val();
        var rewriteRule = $('.edit-host input[name="rewriteRule"]').val();
        var serverPath = $('.edit-host input[name="serverPath"]').val();

        var res = generateHost(name, address, port, documentRoot, remoteAddress, rewriteCond, rewriteRule, serverPath);
        $(this).parent().find('.preview-config').val(res);
    });


    // spoiler
    $('.spoiler-title').click(function(){
        $(this).parent().find('.spoiler-body').toggle(400);
    });
    $('.spoiler .spoiler-body').hide();


    // modify host
    $('.action-button').click(function(){
        var name = $(this).data('name');
        var action = $(this).data('action');

        if (!confirm('Are you sure want to ' + action + ' "' + name + '"'))
            return;

        $('.loading-box').show(500);

        $.ajax({
            url: 'logic.php',
            data: {
                act: action,
                name: name
            },
            success: function(res) {
                setTimeout(function(){
                    $('.loading-box').hide(300);
                    location.reload();
                },11000);

            }
        });
    });
});

/*
 <VirtualHost *:80>
 ServerName test3.dev

 <Location />
 ProxyPass http://www.youtube.com/
 ProxyPassReverse http://www.youtube.com/
 </Location>
 </VirtualHost>
 */