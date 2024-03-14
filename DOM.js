var hash=decodeURIComponent(this.window.location.hash.slice(1).toLowerCase());

function isThere(pattern, input) {
    const regex = new RegExp(pattern, 'g');
    const matches = [];
    let match;
    
    while ((match = regex.exec(input)) !== null) {
        matches.push(match[0]);
    }
    
    return matches;
}

const pattern = new RegExp('alert|src|function', 'i');
if(hash){
        if(isThere(pattern,hash).length>0){
            document.write('<div class="chall"><p>XSS Detected..Try better :)</p></div>');
        }else{
            document.write("<h2>Results for ' <span>" + hash + "</span> '</h2>");
        }
}