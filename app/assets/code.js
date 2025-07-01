const app = new (function() {
    this.tbody = document.getElementById("tbody");
    this.cedula = document.getElementById("cedula");
    this.nombre = document.getElementById("nombre");
    this.apellido = document.getElementById("apellido");
    this.email = document.getElementById("email");
    this.fecha_nacimiento = document.getElementById("fecha_nacimiento");
    this.profesion = document.getElementById("profesion");
    this.id = document.getElementById("id"); // Para editar

    this.listado = () => {
        fetch('/crud/app/controllers/listado.php')
            .then(res => res.json())
            .then(data => {
                this.tbody.innerHTML = "";
                data.forEach(item => {
                    this.tbody.innerHTML += `
                        <tr>
                            <td>${item.id}</td>
                            <td>${item.cedula}</td>
                            <td>${item.nombre}</td>
                            <td>${item.apellido}</td>
                            <td>${item.email}</td>
                            <td>${item.fecha_nacimiento}</td>
                            <td>${item.profesion}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">Eliminar</button>
                            </td>
                        </tr>
                    `;
                });
            })
            .catch(error => console.log(error));
    };

    this.limpiar = () => {
        this.id.value = "";
        this.cedula.value = "";
        this.nombre.value = "";
        this.apellido.value = "";
        this.email.value = "";
        this.fecha_nacimiento.value = "";
        this.profesion.value = "";
    };

    this.guardar = () => {
        var form = new FormData();
        form.append("id", this.id.value);
        form.append("cedula", this.cedula.value);
        form.append("nombre", this.nombre.value);
        form.append("apellido", this.apellido.value);
        form.append("email", this.email.value);
        form.append("fecha_nacimiento", this.fecha_nacimiento.value);
        form.append("profesion", this.profesion.value);

        // Si hay id, editar; si no, crear
        let url = this.id.value ? "/crud/app/controllers/editar.php" : "/crud/app/controllers/guardar.php";

        fetch(url, {
            method: "POST",
            body: form,
        })
        .then((res) => res.json())
        .then((data) => {
            alert(data.success ? "Guardado con éxito" : "Error al guardar");
            this.limpiar();
            this.listado();
        })
        .catch((error) => console.log(error));
    };

    this.eliminar = (id) => {
        if (confirm("¿Seguro que deseas eliminar este registro?")) {
            var form = new FormData();
            form.append("id", id);
            fetch("/crud/app/controllers/eliminar.php", {
                method: "POST",
                body: form, 
            })
            .then(res => res.json())
            .then(data => {
                alert(data.success ? "Eliminado con éxito" : "Error al eliminar");
                this.listado();
            })
            .catch((error) => console.log(error));
        }
    };

    this.editar = (id) => {
        fetch(`/crud/app/controllers/listado.php?id=${id}`)
            .then(res => res.json())
            .then(data => {
                // Si tu PHP devuelve un solo objeto, usa data; si es array, usa data[0]
                let item = Array.isArray(data) ? data[0] : data;
                this.id.value = item.id;
                this.cedula.value = item.cedula;
                this.nombre.value = item.nombre;
                this.apellido.value = item.apellido;
                this.email.value = item.email;
                this.fecha_nacimiento.value = item.fecha_nacimiento;
                this.profesion.value = item.profesion;
            })
            .catch((error) => console.log(error));
    };

    document.addEventListener("DOMContentLoaded", () => {
        this.listado();
    });
})();
