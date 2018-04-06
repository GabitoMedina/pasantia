table = $("div[Listado] table");
selections = [];
op = "proveedor";
url_Local = getURL("_cliente");

$(function () {
    $("div[Listado] table").bootstrapTable(TablePaginationDefault);
});
function edit(datos) {
    form = "div[Registro] form";
    $(form).data("id", datos.id);
    for (var clave in datos) {
        $(form + " [name='" + clave + "']").val(datos[clave]);
    }
}
