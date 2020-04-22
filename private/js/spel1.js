$("#submitButton").click(makeGrid);

function makeGrid() {

    event.preventDefault();

    $height = $("#inputHeight").val();
    $width = $("#inputWidth").val();

    $("#pixelCanvas").empty();

    $tableBuild = "";

    for(j = 1; j <= $width; j++){
    $tableBuild += "<tr>";

    for(i = 1; i <= $width; i++){
    $tableBuild += "<td> </td>";
}
    $tableBuild += "</tr>";
}

    $("#pixelCanvas").append($tableBuild);

    $("td").click(function(){
        $color = $("#colorPicker").val();
        $(this).css("backgroundColor", $color);
    })
}

