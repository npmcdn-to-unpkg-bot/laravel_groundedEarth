$(document).ready(function() {
    /*
    * Set the logo sticker
    */
    //Sticker.init('.logo-sticker')
    /*
    * Delegate all clicks to the document
    */
    $(document).on('click', '[data-delegate=signup]', function(event) {
        /*
        * Set url for post to correct endpoint
        */
        var url = window.location.href+"inquiry"
        $.post(url, $("form").serialize(), function(response, status) {
            if(status == "success") {
                $('form').html(response)
            } else {
                console.log("server error")
            }
        })
    })
})
