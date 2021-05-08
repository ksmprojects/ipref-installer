$(function() {
    
    var config = {
         apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
         authDomain: "iprefs-61aff.firebaseapp.com",
         databaseURL: "https://iprefs-61aff.firebaseio.com",
         projectId: "iprefs-61aff",
         storageBucket: "iprefs-61aff.appspot.com",
         messagingSenderId: "761802127658"
     };
    firebase.initializeApp(config);


var ui = new firebaseui.auth.AuthUI(firebase.auth());
    
    
    var uiConfig = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      return true;
    },
    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  signInFlow: 'popup',
  signInSuccessUrl: 'submitapp.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    firebase.auth.EmailAuthProvider.PROVIDER_ID
  ]
  // Terms of service url.
  //tosUrl: '<your-tos-url>',
  // Privacy policy url.
  //privacyPolicyUrl: '<your-privacy-policy-url>'
};
ui.start('#firebaseui-auth-container', uiConfig);
});   
