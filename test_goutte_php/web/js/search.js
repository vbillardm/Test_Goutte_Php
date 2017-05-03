 document.getElementById('SearchCrawl').addEventListener("click",function(e){
     e.preventDefault();
     $.ajax({
         method: "POST",
         url: "/crawl",
         data: { url: $('#crawl_search_url').val() }
     })
         .done(function() {
             console.log( "Data Saved ");
         });
    });

