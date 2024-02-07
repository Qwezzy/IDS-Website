// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// nice select
$(document).ready(function () {
    $('select').niceSelect();
});

// date picker
$(function () {
    $("#inputDate").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());
});

// owl carousel slider js
$('.team_carousel').owlCarousel({
    loop: true,
    margin: 15,
    dots: true,
    autoplay: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 0
        },
        576: {
            items: 2,
        },
        992: {
            items: 3
        }
    }
})
// Thank you modal script
function showThankYouModal() {
    // Display the Bootstrap modal
    $('#thankYouModal').modal('show');

    // Submit the form asynchronously
    var form = document.getElementById('subscribeForm');
    var formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        // Close the Bootstrap modal after a short delay (you can adjust the delay as needed)
        setTimeout(() => {
            closeThankYouModal();
        }, 2000);

        // Prevent the form from submitting if you want to stay on the current page
        return false;
    })
    .catch(error => console.error('Error:', error));

    // Prevent the form from submitting synchronously
    return false;
}

function closeThankYouModal() {
    // Close the Bootstrap modal
    $('#thankYouModal').modal('hide');
}