function deleteTask(id) {
    console.log("delete:" + id);
    fetch("delete.php", {
        method: "DELETE",
        body: JSON.stringify({ id: id }),
        headers: { "Content-Type": "application/json" }
    }).then(() => location.reload());;
}