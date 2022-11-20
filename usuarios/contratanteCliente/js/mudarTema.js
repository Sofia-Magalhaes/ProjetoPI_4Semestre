function mudarTema() {
    const theme = document.getElementById("theme").value;
    document.getElementsByTagName("meta")[2].content = theme;

}