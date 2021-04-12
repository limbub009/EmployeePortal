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
    li.onclick = function() {postSearchName(li)};
    dataViewer.appendChild(li);
  }
}

function postSearchName(li) {
  window.location.href = 'viewEmp.php?searchname='+(li.innerHTML);
