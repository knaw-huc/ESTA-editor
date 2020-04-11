var rows = 4;
var cols = 4;

function addRow() {
    var row = document.createElement("tr");
    for (var i = 1; i <= cols; i++) {
        var cell = document.createElement("td");
        row.append(cell);
    }
    $("#dependencyTable").append(row);
    rows++;
}

function addCol(){
    $("#dependencyTable > tbody").children().each(
        function () {
            if ($(this).children(0).is("th")) {
                var el = document.createElement("th");
            } else {
                var el = document.createElement("td");
            }
            $(this).append(el);
        }
    );
    cols++;
}