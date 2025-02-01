document.addEventListener('DOMContentLoaded', function() {
    function searchCards() {
           var activeTab = document.querySelector('.tab-content:not(.hidden)');
           var searchInput = activeTab.querySelector('input[type="text"]');
           var query = searchInput.value.toLowerCase();
   
           var cards = activeTab.querySelectorAll('.card');

           cards.forEach(function(card) {
               var name = card.getAttribute('data-name');
               if (name && name.indexOf(query) > -1) {
                   card.style.display = '';
               } else {
                   card.style.display = 'none';
               }
           });
       }

    var searchInputs = document.querySelectorAll('.tab-content input[type="text"]');
    searchInputs.forEach(function(input) {
        input.addEventListener('keyup', searchCards);
    });
});
