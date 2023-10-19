import mysql from 'mysql';
const connection =  mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'root',
    database:'DateBase'
})
connection.connect((err)=>{
    if(err) throw err
    console.log("la conexion sirve valecita")
})
function Mostrar(){
    return new Promise ((resolve, reject)=>{
        connection.query('SELECT * FROM USER',(err,row)=>{
            if(err) reject(err) 
            else resolve (row)
         })
         connection.end()
    })
}

export default Mostrar
