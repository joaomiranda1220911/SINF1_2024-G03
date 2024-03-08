document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.menu-items');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var targetId = item.getAttribute('data-target');
            var targetList = document.getElementById(targetId);

            if (targetList.style.display === 'none') {
                targetList.style.display = 'block';
            } else {
                targetList.style.display = 'none';
            }
        });
    });
});
