function download(url,filename) {
    const a = document.createElement('a');
    a.style.display = 'none';
    a.href = url;
    a.target = '_blank';
    // the filename you want
    a.download = `amnesty-${filename.split(" ").join("-")}`;
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
}