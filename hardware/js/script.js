
var menu = new BloomingMenu({
    itemsNum: 8
  })
  menu.render()
  menu.props.elements.items.forEach(function (item, index) {
    item.addEventListener('click', function () {
      console.log('Item #' + index + 'was clicked')
    })
  })
