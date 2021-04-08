function search(name) {
  console.log(name);

  fetchSearchData(name);
}

function fetchSearchData(name) {
  fetch('search.php', {
    method: 'POST',
    body: new URLSearchParams('name='+name)
  })
  .then(res => res.json())
  .then(res => viewSearchResult(res))
  .catch(e => console.log('Error: '+e))
}

function viewSearchResult(data) {
  const dataViewer = document.getElementById("dataViewer");

  dataViewer.innerHTML = "";

  for(let i=0; i<data.length; i++) {
    console.log("Hi");
    const li = document.createElement("li");
    li.innerHTML = data[i]["name"];
    li.onclick = function() {postSearchName()};
    dataViewer.appendChild(li);
  }
}

function postSearchName() {
  alert("bye");
  fetch('viewEmployee.php', {
    method: 'POST',
    body: new URLSearchParams('searchname='+name)
  })
}

// $('li').on('click', function() {
//     console.log("Bye");
//      alert(document.getElementsByTagName('li')[0].innerHTML);
//      alert("bye");
// });

// $(document).ready(function()
//  {
//   $("ul").on("click","li", function(){
//     alert("Hello");
//      // alert($(this).find("span.t").text());
//   });
// });
