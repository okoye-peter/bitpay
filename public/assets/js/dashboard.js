/**Fetch profit on login client on dashboard page 3b*/

firebase.auth().onAuthStateChanged(user => {
    if (user) {
        getUserData(user.uid)
    }
})
function getUserData(uid) {
    firebase.database().ref('Invesments/' + uid).once("value", snap => {
        console.log(snap.val())
    })
}