# coding: utf-8

# La classe représentant les parties statiques du classeur
class Statique:
	
	def __init__(self):
	"""Constructeur de la classe Statique"""
		# Création du classeur 
		workbook = xlsxwriter.Workbook('CRA_Fevrier_2019.xlsx')
		# Création de la feuille et nommage de celle-ci
		worksheet = workbook.add_worksheet('Feuille1')
		
	def remplir_classeur(self, cellule, chaine, format, merge):
	""" Fonction permettant de remplir les encadrés important de la partie statique"""
		self.cellule = cellule
		self.chaine = chaine
		self.format = format 
		self.merge = merge
		if (!merge):
			worksheet.write(cellule, chaine, format)
		else:
			worksheet.merge_range(cellule, chaine,format)
			
	def bordure(self, row, col, format, increment):
		""" Fonction permettant de remplir les encadrés vides du classeur"""
		self.row = row
		self.col = col
		self.format = format
		self.increment = increment
		if increment = 'row':
			for col in range(3, 8):
				worksheet.write(row, col, '', format)
				col += 1
		else:
			for row in range(9, 40):
				if (row != 39):
					worksheet.write(row, col, '', encadre_format_cote)
					row += 1
				else:
					worksheet.write(row, col, '', encadre_format_bas)
	
	