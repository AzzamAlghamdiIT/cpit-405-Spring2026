const ACCESS_KEY = "3Vfq83yf80bG_olwYvaWNBex5dupZrP0ttoZvxe7hL8";

const imageContainer = document.getElementById("images");
const message = document.getElementById("message");

// 🔹 عرض الصور + الرسائل
function displayImages(images) {
    imageContainer.innerHTML = "";

    if (images.length === 0) {
        message.textContent = "No results found.";
        return;
    }

    message.textContent = "";

    images.forEach(img => {
        const image = document.createElement("img");
        image.src = img.urls.small;
        image.alt = "Unsplash Image";
        imageContainer.appendChild(image);
    });
}

// 🔹 رسالة تحميل
function showLoading() {
    message.textContent = "Loading...";
    imageContainer.innerHTML = "";
}

// 🔹 XHR
function searchXHR() {
    const query = document.getElementById("searchInput").value;
    if (!query) return;

    showLoading();

    const xhr = new XMLHttpRequest();
    xhr.open("GET", `https://api.unsplash.com/search/photos?query=${query}&per_page=12`);
    xhr.setRequestHeader("Authorization", `Client-ID ${ACCESS_KEY}`);

    xhr.onload = function () {
        const data = JSON.parse(xhr.responseText);
        displayImages(data.results);
    };

    xhr.onerror = function () {
        message.textContent = "Something went wrong.";
    };

    xhr.send();
}

// 🔹 Fetch (Promises)
function searchFetch() {
    const query = document.getElementById("searchInput").value;
    if (!query) return;

    showLoading();

    fetch(`https://api.unsplash.com/search/photos?query=${query}&per_page=12`, {
        headers: {
            Authorization: `Client-ID ${ACCESS_KEY}`
        }
    })
    .then(res => res.json())
    .then(data => displayImages(data.results))
    .catch(() => {
        message.textContent = "Something went wrong.";
    });
}

// 🔹 Async / Await
async function searchAsync() {
    const query = document.getElementById("searchInput").value;
    if (!query) return;

    showLoading();

    try {
        const res = await fetch(`https://api.unsplash.com/search/photos?query=${query}&per_page=12`, {
            headers: {
                Authorization: `Client-ID ${ACCESS_KEY}`
            }
        });

        const data = await res.json();
        displayImages(data.results);
    } catch (error) {
        message.textContent = "Something went wrong.";
    }
}