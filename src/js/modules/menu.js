var $ = require('jquery');

module.exports = {
	init: function () {

        $('.nav-toggle').on('click', function () {
            $('.header').toggleClass('active');
            $('.header-nav').toggleClass('active');
        });

        var submenuBtn = document.querySelector('.main-menu .menu-item .submenu-btn');
        submenuBtn.addEventListener('click', function() {

            console.log('You clicked the submenu button.');
            this.closest('.menu-item').classList.toggle('active');
            var screenReaderText = this.querySelector('.visually-hidden').innerHTML;
            var screenReaderShow = screenReaderText.replace('Hide', 'Show');
            var screenReaderHide = screenReaderText.replace('Show', 'Hide');

            if ( this.closest('.menu-item').classList.contains('active') ) {
                this.setAttribute('aria-expanded', 'true');
                this.querySelector('.visually-hidden').innerHTML = screenReaderHide;
            } else {
                this.setAttribute('aria-expanded', 'false');
                this.querySelector('.visually-hidden').innerHTML = screenReaderShow;
            }

        });

        // Nav scroll effect
        var lastScrollTop = 0;
        var navBar = document.querySelector('.header-nav');
        window.addEventListener('scroll', function(){
            var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            if (st > lastScrollTop){
                // Scrolling down
                if ( !navBar.classList.contains('hide') ) {
                    navBar.classList.remove('reveal');
                    navBar.classList.add('hide');
                }
            } else {
                // Scrolling up
                if ( !navBar.classList.contains('reveal') ) {
                    navBar.classList.remove('hide');
                    navBar.classList.add('reveal');
                }
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);
	}
}