let searchInput = document.getElementById("search");
let datalist = document.getElementById("filteredUserOptions");
searchInput.addEventListener('keyup', async function () {
    while (datalist.lastChild) {
        datalist.removeChild(datalist.lastChild);
    }
    console.log(searchInput.value);
    await fetch("user/filter/",
        {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json; charset=UTF-8',
                'url': 'user/filter/',
                "X-CSRF-Token": document.querySelector('input[name=_token]').value
            },
            body: JSON.stringify({
                "nonFilteredUser": searchInput.value
            })
        }).then(res => res.json()).then(data => {
        displayResults(data)
    });

     function displayResults(results) {
        for (let i = 0; i < results.filterEventUser.length; i++) {
            console.log("data: " + results.filterEventUser[i].name);
            let option = document.createElement("option");
            option.textContent = results.filterEventUser[i].name;
            datalist.appendChild(option);
        }
    }
})


