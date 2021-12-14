$(document).ready(function() {
    $("#pagamentoForm").submit(function(event) {
        submitForm();
        return false;
    });
});

function submitForm() {
    $.ajax({
        type: "POST",
        url: "finalizar_compra.php",
        cache: false,
        data: $('form#pagamentoForm').serialize(),
        success: function(response) {
            $("#pagamento").html(response)
            $("#pagamento-modal").modal('show');
        },
        error: function() {
            alert("Error");
        }
    });
}