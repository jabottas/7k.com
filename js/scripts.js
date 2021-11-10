let cont = 0;

function criamsgbox() {
    let criarDiv = document.createElement('div')
    let pegarCol = document.querySelector('.logmessage')
    let id = document.createAttribute('id')
    cont++;
    id.value = 'div-' + (cont)
    criarDiv.setAttributeNode(id)
    pegarCol.appendChild(criarDiv)
    criarDiv.className = "msgboxsup4"
    let criarParagrafo = document.createElement('p')
    criarDiv.appendChild(criarParagrafo)

    criarParagrafo.innerHTML = "comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal! comentario legal!"  
}

$(document).ready(function() {
    // Show Tasks
    function loadTasks() {
        $.ajax({
            url: "show-tasks.php",
            type: "POST",
            success: function(data) {
                $("#tasks").html(data);
            }
        });
    }

    loadTasks();

    // Add Task
    $("#addBtn").on("click", function(e) {
        e.preventDefault();

        var task = $("#taskValue").val();

        $.ajax({
            url: "add-task.php",
            type: "POST",
            data: {task: task},
            success: function(data) {
                loadTasks();
                $("#taskValue").val('');
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });

    // Remove Task
    $(document).on("click", "#removeBtn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        
        $.ajax({
            url: "remove-task.php",
            type: "POST",
            data: {id: id},
            success: function(data) {
                loadTasks();
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });
});