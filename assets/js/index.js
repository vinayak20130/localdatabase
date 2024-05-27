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



        // document.addEventListener("DOMContentLoaded", function() {
        //     var flexItems = document.querySelectorAll(".data-show-suggesstion .flex-item");
        //     var activeItem = null;
        
        //     flexItems.forEach(function(item) {
        //         item.addEventListener("click", function(event) {
        //             event.preventDefault(); // Prevent default link behavior
        
        //             // Remove active class from the previously active item
        //             if (activeItem) {
        //                 activeItem.classList.remove("bg14");
        //                 activeItem.classList.remove("br4");
        //                 activeItem.classList.remove("bdbl");
        //             }
        
        //             // Add active class to the clicked item
        //             this.classList.add("bg14");
        //             this.classList.add("br4");
        //             this.classList.add("bdbl");
        
        //             // Update the active item reference
        //             activeItem = this;
        //         });
        //     });
        // });



        // tab change grapg 1 
        function changeTabArcFlash1(tabIndex) {
            const tabs = document.querySelectorAll('.box-rates-graphs-arcflashtab1 .tabs .tab');
            const contents = document.querySelectorAll('.box-rates-graphs-arcflashtab1 .content');

            // Remove 'active' class from all tabs and contents
            tabs.forEach(tab => tab.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Add 'active' class to the clicked tab and content
            tabs[tabIndex - 1].classList.add('active');
            contents[tabIndex - 1].classList.add('active');
        }
         // tab change grapg 2
         function changeTabArcFlash2(tabIndex) {
            const tabs = document.querySelectorAll('.box-rates-graphs-arcflashtab2 .tabs .tab');
            const contents = document.querySelectorAll('.box-rates-graphs-arcflashtab2 .content');

            // Remove 'active' class from all tabs and contents
            tabs.forEach(tab => tab.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Add 'active' class to the clicked tab and content
            tabs[tabIndex - 1].classList.add('active');
            contents[tabIndex - 1].classList.add('active');
        }
         // tab change grapg 3 
         function changeTabArcFlash3(tabIndex) {
            const tabs = document.querySelectorAll('.box-rates-graphs-arcflashtab3 .tabs .tab');
            const contents = document.querySelectorAll('.box-rates-graphs-arcflashtab3 .content');

            // Remove 'active' class from all tabs and contents
            tabs.forEach(tab => tab.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Add 'active' class to the clicked tab and content
            tabs[tabIndex - 1].classList.add('active');
            contents[tabIndex - 1].classList.add('active');
        }

