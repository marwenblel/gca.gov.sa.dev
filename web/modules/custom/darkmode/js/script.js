(function (Drupal, once) {
    Drupal.behaviors.darkmodeSwitcher = {
        attach: function (context, settings) {
            once('darkmodeSwitcher', '#darkmode-toggle', context).forEach(function (element) {
                element.addEventListener('change', function () {
                    if (this.checked) {
                        document.body.classList.add('dark-mode');
                    } else {
                        document.body.classList.remove('dark-mode');
                    }
                });
            });
        }
    };
})(Drupal, once);