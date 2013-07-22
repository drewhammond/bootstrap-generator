$(document).ready(function() {
    $('#customize').on('submit', function(e) {
        e.preventDefault();
    });
    
    $('#customize').find('.btn-toggle').on('click', function(e) {
        e.preventDefault();
        alert("Togglin'");
    });
    
    $('#jquery-plugins').find('label').on('click', 'input', function(e) {
        if (this.id == 'bootstrap-popover' && this.checked === true) {
            $('#bootstrap-tooltip').prop('checked', 'checked');
        }
    });
});