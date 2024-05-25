/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      color: {
        primary: '#DEA206', 
        secondary:'#D9D9D9', 
        boga:'#2E9CE1', 
        busana:'#009755', 
        kecantikan:'#C10925', 
        rpl:'#DE4537', 
        wisata: '#896B65', 
        musik:'#8259A1', 
        perhotelan:'#DDBA38'
      }
    },
  },
  plugins: [],
}

