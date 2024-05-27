function changeTab(tab) {
    var tabs = document.querySelectorAll('#tabs li');
    var tabContents = document.querySelectorAll('.tab-content');

    // Remove 'current' class from all tabs and tab contents
    tabs.forEach(function(item) {
        item.classList.remove('current');
    });
    tabContents.forEach(function(item) {
        item.classList.remove('current');
    });

    // Add 'current' class to the clicked tab and its corresponding content
    var tabId = tab.getAttribute('data-tab');
    document.getElementById(tabId).classList.add('current');
    document.getElementById(tabId + '-content').classList.add('current');
}


document.addEventListener("DOMContentLoaded", function() {
    // Get all tab buttons and tab contents
    var tabBtns = document.querySelectorAll('.tab-btn');
    var tabContents = document.querySelectorAll('.tab-content');

    // Add click event listeners to tab buttons
    tabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var tabId = this.getAttribute('data-tab');

            // Remove 'active' class from all tab buttons and tab contents
            tabBtns.forEach(function(item) {
                item.classList.remove('active');
            });
            tabContents.forEach(function(item) {
                item.classList.remove('active');
            });

            // Add 'active' class to the clicked tab button and its corresponding content
            this.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });
});
