'use-strict'
const userTag = "LeonardoOrozco16";
const fetchURI = `https://api.github.com/users/${userTag}/repos`;

async function getRepos() {
    try {
        new URL(fetchURI )
    } catch (error) {
        throw new Error("Invalid URL");
    }
    try {
        const response = await fetch(fetchURI,{method:"GET"});
        const data = await response.json();
        return data;
    }
    catch (error) {
        throw new Error("Something was wrong");
        return null;
    }
}

async function filterRepos() {
    const repos = await getRepos();
    let filteredRepos = repos.map((repo) => {
        let repoNeededfields = {
            "name": repo.name,
            "description": repo.description,
            "language": repo.language,
            "has_pages":repo.has_pages
        }
        return repoNeededfields;
    });
    return filteredRepos;
}

async function listRepositories() {
    let repos = await filterRepos();
    repos.map((repo) => {
        //crear html para el listado de repos
    });
}

listRepositories();