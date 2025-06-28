const app = new (function() {
    this.tbody = document.getElementById("tbody");

    this.listado = () => {
        fetch('/crud/app/controllers/listado.php')
            .then(res => res.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => console.log(error));
    };

})();