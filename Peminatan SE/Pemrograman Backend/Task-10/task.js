/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */
 const showDownload = (result) => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      Math.random() < 0.5 ? resolve(result) : reject("Download Gagal.");
    }, 3000)
  })
}
  
/**
* Fungsi untuk download file
* @param {function} callback - Function callback show
*/
const download = async (callShowDownload) => {
  await callShowDownload("windows-10.exe");
}
  
download(showDownload)
.then((resolve) => {
  console.info("Download Selesai.");
  console.info(`Hasil Download: ${resolve}`);
})
.catch((reject) => {
  console.error(reject);
});
  
/**
* TODO:
* - Refactor callback ke Promise atau Async Await
* - Refactor function ke ES6 Arrow Function
* - Refactor string ke ES6 Template Literals
*/
