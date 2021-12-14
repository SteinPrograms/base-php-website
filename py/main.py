from database import MyDatabase
from random import randrange

portfolios = MyDatabase().get_portfolios()

for portfolio in portfolios:
    for _ in range(5): 
        MyDatabase().add_new_value_to_portfolio(portfolio,randrange(200))