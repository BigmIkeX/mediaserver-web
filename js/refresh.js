        function myFunction() {
            $('#all').load('http://emslanding.local #all ');
            var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'js/checkservices.js';
            head.appendChild(script);

            $('body').show();
            $('.version').text(NProgress.version);
            NProgress.start();
            setTimeout(function() { NProgress.done();
                $('.fade').removeClass('out'); }, 3500);
            $("#b-0").click(function() { NProgress.start(); });
            $("#b-40").click(function() { NProgress.set(0.4); });
            $("#b-inc").click(function() { NProgress.inc(); });
            $("#b-100").click(function() { NProgress.done(); });
        }
