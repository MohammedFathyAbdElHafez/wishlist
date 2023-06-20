const drawItemsTable = (items) => {
    var table = document.getElementById("items-table");
    var tbody = table.querySelector("tbody");

    /*   for (let i = 1; i < rows.length; i++) {
    rows[i].children[0].textContent = a[i-1].name
    rows[i].children[0].textContent = a[i-1].name
    rows[i].children[1].textContent = a[i-1].age
    rows[i].children[2].textContent = a[i-1].hometown
  } */

    tbody.innerHTML = "";

    items.forEach((key) => {
        let row =
            "<tr>" +
            "<td>" +
            key.id +
            "</td>" +
            "<td>" +
            key.name +
            "</td>" +
            "<td>" +
            key.price +
            "</td>" +
            "<td>" +
            key.seller +
            "</td>" +
            "</tr>";

        tbody.innerHTML += row;
    });
};
