/**
 * TODO 2.
 * Import variable users dari file data/users.js
 */
import users from "../data/users"
import User from "../model/User"

/**
 * SARAN TODO3 - TODO5.
 * Tulis dulu solusi tanpa penggunaan promise.
 * Setelah itu refactor dengan menambahkan promise.
 */
const formatUserPlain = (title) => {
    return users.map((user) => {
        return new User(title + ". " + user.name, user.age, user.major)
    })
};

/**
 * TODO 3.
 * Buat function formatUser: Format nama user.
 * Fungsi membutuhkan waktu 3 detik.
 * Hint:
 * - Gunakan method map untuk format user.
 * - Gunakan promise untuk handle asynchronous.
 */
const formatUser = (title) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const data =  users.map((user) => {
                return new User(`${title}. ${user.name}`, user.age, user.major)
            })

            resolve(data)
        }, 3000, title)
    })
};

/**
 * SARAN TODO3 - TODO5.
 * Tulis dulu solusi tanpa penggunaan promise.
 * Setelah itu refactor dengan menambahkan promise.
 */
const findByNamePlain = (name) => {
    return users.find((user) => {
        return user.name == name;
    })
};

/**
 * TODO 4.
 * Buat function findByName: Mencari 1 user by name.
 * Fungsi membutuhkan waktu 2 detik.
 * Hint:
 * - Gunakan method find untuk mencari 1 user.
 * - Gunakan promise untuk handle asynchronous.
 */
const findByName = (name) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const user =  users.find((user) => {
                return user.name == name
            })

            resolve(user)
        }, 2000, name)
    })
}

/**
 * SARAN TODO3 - TODO5.
 * Tulis dulu solusi tanpa penggunaan promise.
 * Setelah itu refactor dengan menambahkan promise.
 */
const filterByMajorPlain = (major) => {
    return users.filter((user) => {
        return user.major == major
    })
}

/**
 * TODO 5.
 * Buat function filterByMajor: Mencari semua user by major.
 * Fungsi membutuhkan waktu 4 detik.
 * Hint:
 * - Gunakan method filter untuk mencari semua user.
 * - Gunakan promise untuk handle asynchronous.
 */
const filterByMajor = (major) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const data = users.filter((user) => {
                return user.major == major
            })

            resolve(data)
        }, 4000, major);
    })
};

/**
 * TODO 6.
 * Export fungsi: formatUser, findByName, filterByMajor
 */
export { formatUser, findByName, filterByMajor }
