const btnlocal = document.querySelector(".card")
btnlocal.onclick = () => {
    const description = document.getElementById("description")
    localStorage.setItem("description",description.value);
}

if(localStorage.getItem("description") != null){
    document.querySelector(".modal form").value = localStorage.getItem("description")
    }
    document.getElementById("description").value = localStorage.getItem("description");
