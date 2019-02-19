# coding: utf-8

# La classe représentant les parties statiques du classeur
class Statique:
	
	def __init__(self):
		# Création du classeur 
		workbook = xlsxwriter.Workbook('CRA_Fevrier_2019.xlsx')
		# Création de la feuille et nommage de celle-ci
		worksheet = workbook.add_worksheet('Feuille1')
		
	def remplir_classeur(self, cellule, chaine, format):
		self.cellule = cellule
		self.chaine = chaine
		self.format = format 
		worksheet.write(cellule, chaine, format)