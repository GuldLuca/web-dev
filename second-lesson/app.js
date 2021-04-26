function create_item(){
    console.log("creating item...")
    let item_name = document.querySelector("#item_name").value


    
    // check if there are items already in localStorage
    if( localStorage.items ){
      console.log("yes items already there")
      // items is just text, but looks like an array, so convert it to an array
      const items = JSON.parse(localStorage.items) // converts text into array
      let new_item = {"id":Math.floor(Math.random()*100), "name":item_name};
      items.push(new_item);
      // save it to the localStorage, but this is an array... we need text
      localStorage.items = JSON.stringify(items)
      render_item(new_item.id, new_item.name);
    }else{  
      console.log("no, items not there. It is empty")
      const items = [];

      let new_item = {"id":Math.floor(Math.random()*100), "name": item_name};
      items.push(new_item);
      // convert the items array into an items "array" text
      items_array_as_text = JSON.stringify(items)
      // save the items text in localStorage
      localStorage.items = items_array_as_text
      render_item(new_item.id, new_item.name)
    }
    
  }

  function delete_item(event){
    const id = event.currentTarget;
    console.log(id);
  }
  
  
  function show_items(){
    if( localStorage.items ){
      // convert the items to an array
      const array_items = JSON.parse(localStorage.items) // text to array
      array_items.forEach( item => render_item(item) )
    }
  }
  show_items()
  
  
  function render_item(id, name){
    let div_item = `
    <div class="item">
      <div>${id}</div>
      <div>${name}</div>
      <button onclick="delete_item(event)">delete item</button>
    </div>`
    document.querySelector("#items").insertAdjacentHTML('beforeend', div_item)
  }
  
  