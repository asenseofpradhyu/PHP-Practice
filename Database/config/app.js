
async function gettitle() {
    const response = await fetch('post.php');

    const data = await response.json();
    console.log(data);

    return data;
}

gettitle();