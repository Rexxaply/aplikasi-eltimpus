const image = document.getElementById("images"),
    input = document.getElementById("foto");

input.addEventListener("change", () => {
    image.src = URL.createObjectURL(input.files[0])
});

