# CodeIgniter Case Studies

This project aims to show how to solve problems
using CodeIgniter

## Case Study 1: The CRUD

Here, we show how to use Form helpers in the Views, and use them
in the Controllers, then save them with the help of
Models.

For this, we need a fictional example, and an CI App name: `Staples`.
Staples will be used to record different small office supplies.

### Schema

 * things (id, name, quantity, price)
 
### Events

#### Release 1
The user must be able to add new things and list all the added
office things. Upon listing, the user can select to edit or delete
the item.

#### Release 2
The user can list the office things and specifically view the specific
thing for more operations. One operation is to reduce the amount of items
by having a text field and a submit button, similar to a checkout button.

