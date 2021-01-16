//Per lehtesimin e punes me AJAX, kodi i marrur nga Coursera - Profesori Yaakov Chaikin
//Mbeshtet edhe JSON por nuk do te shfrytezohet nga ne (besojme)

(function (global) {

    // Set up a namespace for our utility
    var ajax = {};

    // Makes an Ajax GET request to 'requestUrl'
    ajax.sendGetRequest =
        function (requestUrl, responseHandler, isJsonResponse, send) {
            var request = new XMLHttpRequest();
            request.onreadystatechange =
                function () {
                    handleResponse(request,
                        responseHandler,
                        isJsonResponse);
                };
            request.open("GET", requestUrl, true);
            request.send(send); //Addition by us in case we want to send data to the server
        };
        
    // Only calls user provided 'responseHandler'
    // function if response is ready
    // and not an error
    function handleResponse(request,
        responseHandler,
        isJsonResponse) {
        if ((request.readyState == 4) &&
            (request.status == 200)) {

            // Default to isJsonResponse = true
            if (isJsonResponse == undefined) {
                isJsonResponse = true;
            }

            if (isJsonResponse) {
                responseHandler(JSON.parse(request.responseText));
            }
            else {
                responseHandler(request.responseText);
            }
        }
    }


    // Expose utility to the global object
    global.ajax = ajax;


})(window);    