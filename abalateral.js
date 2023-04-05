var header           = document.getElementById('header2');
    var navigationHeader = document.getElementById('navigation_header2');
    var content          = document.getElementById('content');
    var mostrarbarralateral      = false;

    function toggleSidebar()
    {
        mostrarbarralateral = !mostrarbarralateral;
        if(mostrarbarralateral)
        {
            navigationHeader.style.marginLeft = '59vw';
            navigationHeader.style.animationName = 'animation';
            content.style.filter = 'blur(2px)';
        }
        else
        {
            navigationHeader.style.marginLeft = '100vw';
            navigationHeader.style.animationName = '';
            content.style.filter = '';
        }
    }

    function fecharbarralateral()
    {
        if(mostrarbarralateral)
        {
            mostrarbarralateral = true;
            toggleSidebar();
        }
    }

    window.addEventListener('resize', function(event) {
        if(window.innerWidth > 768 && mostrarbarralateral) 
        {  
            mostrarbarralateral = true;
            toggleSidebar();
        }
    });