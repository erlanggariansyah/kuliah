const User = require("./User")

/**
 * TODO 1.
 * Buat array of object users (5 users).
 * Object memiliki property: name, age, major.
 * Note: Ubah var menggunakan JavaScript Modern.
 */
const users = []
const names = ["Erlangga Riansyah", "Robert Downey Jr.", "Sebastian Schumann", "Vasily Zaytsev", "Rokossovsky"]

for (const nama of names) {
  users.push(new User(nama, Math.round(Math.random() * 100), "Informatics"))
}

/**
 * TODO 2
 * Buat function all: Menampilkan semua data user.
 * Hint: Gunakan for/for-of.
 * Note: Ubah function menggunakan arrow function.
 */
const all = () => {
  for (const user of users) {
    console.info(user);
  }
}

/**
 * TODO 3
 * Buat function store: Menambahkan user baru.
 * Hint: Gunakan method push.
 * Note: Ubah function menggunakan arrow function.
 */
const store = (user) => {
  try {
    if (user instanceof User) {
      users.push(user)
    } else {
      users.push(new User(user.name, user.age, user.major))
    }
  } catch (exception) {
    console.error(`Error caught: ${exception}`)
  }
}

/**
 * TODO 4.
 * Buat function update: Mengedit data user.
 * Hint: re-assign array.
 * Note: Ubah function menggunakan arrow function.
 */
const update = (index, user) => {
  if (index < -1 || users[index] == null) 
    console.error(`Error caught: user with id: ${id} is not found.`);
  
  try {
    if (user instanceof User) {
      users[index] = user;
    } else {
      const updatedUser = new User(user.name, user.age, user.major)
      users[index] = updatedUser;
    }
  } catch (exception) {
    console.error(`Error caught: ${exception}`)
  }
}

/**
 * TODO 5.
 * Buat function destroy: Menghapus data user.
 * Hint: Gunakan method splice.
 * Note: Ubah function menggunakan arrow function.
 */
const destroy = (index) => {
  if (index < -1 || users[index] == null) 
    console.error(`Error caught: user with id: ${id} is not found.`);

  users.splice(index, 1);
}

/**
 * Function main.
 * Jangan edit atau hapus function main.
 * Function ini untuk testing task.
 */

const main = () => {
  /**
   * Test function index
   */
  console.log("# Get All Users");
  all();

  /**
   * Test function store
   */
  console.log("# Add New User: Sabiq");
  const newUser = {
    name: "Sabiq",
    age: 20,
    major: "Informatics",
  };
  store(newUser);

  /**
   * Test function update
   */
  console.log("# Edit User: Isfa");
  const editedIndex = 1;
  const editedUser = {
    name: "Isfhani Ghiyath",
    age: 23,
    major: "English",
  };
  update(editedIndex, editedUser);

  /**
   * Test function destroy
   */
  console.log("# Delete User: Nurul");
  const deletedIndex = 2;
  destroy(deletedIndex);
};

main();

/**
 * Jangan hapus exports.
 * Exports ini untuk tujuan testing.
 */
module.exports = { users, all, store, update, destroy };
