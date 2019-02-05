import xlsxwriter
import datetime as date
import calendar
import win32com.client as win32

# Create a workbook and add a worksheet.
workbook = xlsxwriter.Workbook('CRA_Fevrier_2019.xlsx')
worksheet = workbook.add_worksheet('Feuille1')
# workbook.formats[0].set_font_color('white')


# Some data we want to write to the worksheet.
nom_prenom = {'NOM : ':'ADOUKI', 'PRENOM :   ': 'Wesley'}
date = date.datetime.now()
calendrier = calendar.monthrange(date.year, date.month)
titre_format = workbook.add_format({'bold': True, 'font_size': 14})
nom_prenom_format_top = workbook.add_format({ 'bold': True, 'top':2, 'left':2, 'right':2})
nom_prenom_format_bottom = workbook.add_format({ 'bold': True, 'bottom':2, 'left':2, 'right':2})
nom_prenom_format_value_top = workbook.add_format({'top':2, 'left':2, 'bold': True})
nom_prenom_format_value_bottom = workbook.add_format({'left':2, 'bold': True})
merge_format = workbook.add_format({'bold': 1, 'border': 2, 'align': 'center', 'valign': 'vcenter',})
format = workbook.add_format({'top': 2})
bordure_bas_format = workbook.add_format({ 'bottom': 2})
encadre_format_cote = workbook.add_format({'left': 2, 'right': 2})
encadre_format_bas = workbook.add_format({'left': 2, 'right': 2, 'bottom': 2, 'align': 'center'})
encadre_format = workbook.add_format({'border':2, 'align': 'center'})
encadre_format_right_bas = workbook.add_format({'right': 2, 'bottom': 2})

row = 40
col = 3
for col in range(3, 8):
		worksheet.write(row, col, '', bordure_bas_format)
		col += 1
	
row = 40
col = 8
for col in range(8, 11):
		worksheet.write(row, col, '', bordure_bas_format)
		col += 1
	
row = 4
col = 3
for col in range(3, 5):
	worksheet.write(row, col, '', format)
	col += 1
row = 9
col = 1
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)

row = 9
col = 2
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)
row = 9
col = 7
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)

row = 9
col = 8
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)
		
row = 9
col = 9
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)
		
row = 9
col = 10
for row in range(9, 40):
	if (row != 39):
		worksheet.write(row, col, '', encadre_format_cote)
		row += 1
	else:
		worksheet.write(row, col, '', encadre_format_bas)
		
worksheet.write('D2', "Compte Rendu d'Activité Mensuel", titre_format)
worksheet.write('B41', 'Total', encadre_format)
worksheet.write('C41', '', encadre_format_bas)
worksheet.write('H41', '', encadre_format)
worksheet.write('K41', '', encadre_format_right_bas)
worksheet.write('G41', '', encadre_format_right_bas)
worksheet.merge_range('F5:I6', 'CLIENT:Enedis', merge_format) 
worksheet.merge_range('J5:K6', 'MOIS: Février 2019', merge_format) 
worksheet.merge_range('B7:B9', 'Date', merge_format) 
worksheet.merge_range('C7:C9', 'Jour (L,M,M,...)', merge_format) 
worksheet.merge_range('D7:G9', 'Projet', merge_format) 
worksheet.merge_range('H7:H9', 'Jours facturés', merge_format) 
worksheet.merge_range('I7:I9', 'Frais', merge_format) 
worksheet.merge_range('J7:J9', 'Intercontrat', merge_format) 
worksheet.merge_range('K7:K9', 'Absences', merge_format) 
worksheet.merge_range('D10:G40', 'CCTP pour une prestation de MOE pour ADDICT', merge_format) 

col = 1
row = 4
for key, value in nom_prenom.items():
	if (row < 5):			
		worksheet.write(row, col, key, nom_prenom_format_top)
		worksheet.write(row, col + 1, value, nom_prenom_format_value_top)
		row += 1
	else:
		worksheet.write(row, col, key, nom_prenom_format_bottom)
		worksheet.write(row, col + 1, value, nom_prenom_format_value_bottom)
		row += 1

# Calcul du décalage des jours en fonction du jour de la semaine commencée 
if (calendrier[0] == 0):
	jours = (['L', 1], ['M', 1], ['M', 1], ['J', 1], ['V', 1], ['S', ''], ['D', ''])
elif (calendrier[0] == 1):
	jours = (['M', 1], ['M', 1], ['J', 1], ['V', 1], ['S', ''], ['D', ''], ['L', 1])
elif (calendrier[0] == 2):
	jours = (['M', 1], ['J', 1], ['V', 1], ['S', ''], ['D', ''], ['L', 1], ['M', 1])
elif (calendrier[0] == 3):
	jours = (['J', 1], ['V', 1], ['S', ''], ['D', ''], ['L', 1], ['M', 1], ['M', 1])
elif (calendrier[0] == 4):
	jours = (['V', 1], ['S', ''], ['D', ''], ['L', 1], ['M', 1], ['M', 1], ['J', 1])
elif (calendrier[0] == 5):
	jours = (['S', ''], ['D', ''], ['L', 1], ['M', 1], ['M', 1], ['J', 1], ['V', 1])
else:
	jours = (['D', ''], ['L', 1], ['M', 1], ['M', 1], ['J', 1], ['V', 1], ['S', ''])
	
row = 9
col = 2
print ("1er jour de l'annee:" + str(calendrier[0]))
print ("Nombre de jours du mois" + str(calendrier[1]))
for jour in range(1, round(calendrier[1]/7) + 1):
	for key, value in (jours):
		worksheet.write(row, col, key)
		worksheet.write(row, col + 5, value)
		row += 1



# num_jours = 1
row = 9
col = 1
for num in range(1,32):
		worksheet.write(row, col, num, encadre_format_cote)
		row += 1
worksheet.write('H41', '=SUM(H10:H40)', encadre_format)		

workbook.close()

excel = win32.gencache.EnsureDispatch('Excel.Application')
wb = excel.Workbooks.Open(r'C:\Users\BTSSNEC\Desktop\CRA_Fevrier_2019.xlsx')
ws = wb.Worksheets("Feuille1")
ws.Columns.AutoFit()
wb.Save()
excel.Application.Quit()
