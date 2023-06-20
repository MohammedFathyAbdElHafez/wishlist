window.addEventListener('load', async () => {
    var CSRF_TOKEN = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    var formData = new FormData();

    formData.append("_token", CSRF_TOKEN);

    const location = window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port: '');

    const response = await fetch(
      `${location}/api/items/`
    );
    const responseData = await response.json();
    /* if (response.status !== 200) throw Error(data.message); */

    drawItemsTable(responseData.data);

});
