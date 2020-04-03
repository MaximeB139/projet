
var callBackGetSuccess = function(data) {
    //console.log("donnees api", data)
    console.log(data.articles[0])
    return (data);
    //return response.json();
    //alert("news : " + data.main.articles)
    var element = document.getElementById("world_news");
    element.innerHTML =  "les dernieres news" + data.articles[0];

    //const title = document.querySelector("h1");
    //title.innerText += titre;
}


function buttonClickGET() {
    var url  = 'http://newsapi.org/v2/top-headlines?' +
    'country=us&' +
    'apiKey=c62e8ce29f944dd7a27ac1efae92c153';

    $.get(url, callBackGetSuccess).done(function() {

    })
    .fail(function(){
        alert( "error" );
    })
    .always(function() {

    });

}