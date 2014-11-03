feature:
    As a pizerria manager,
    I want to be able to register orders
    So I can deliver them

    @unit @incomplete
    Scénario: Order a pizza
        Given a customer
        When he orders a pizza with or without toppings
        Then the detailed order is available so it can be prepared by the pizzaiolo

    @unit @incomplete
    Scénario: As a pizza delivery boy, I have access to all detailed information to be able to deliver the pizzas
        Given a pizza order
        When the order is ready
        Then I can access all delivery information about the order
