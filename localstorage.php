<script>

let data = localStorage.getItem('users')
data = JSON.parse(data)

if (data){


data.map(item => {
  item.map(item => {
    document.write(item.message, ' ', 
    item.login,' ', 
                  
                  '<br>')
  })
})
} else document.write('Пусто')

</script>