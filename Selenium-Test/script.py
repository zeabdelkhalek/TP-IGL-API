from selenium import webdriver
import time

url='http://127.0.0.1:8080'
driver = webdriver.Chrome("./chromedriver")
driver.get(url)

# Find add student button and click ! 

addLink = driver.find_element_by_xpath("//a[@href='/profile']")
addLink.click()

time.sleep(3)

# Find all inputs and fill the form ! 

driver.find_element_by_id("input-matricule").send_keys("17/068")
driver.find_element_by_id("input-email").send_keys("hi_kara@esi.dz")
driver.find_element_by_id("input-nom").send_keys("Kara")
driver.find_element_by_id("input-prenom").send_keys("Imene")
driver.find_element_by_id("input-adresse").send_keys("Cité les oiseaux")
driver.find_element_by_id("input-commune").send_keys("Bab louedd")
driver.find_element_by_id("input-wilaya").send_keys("Algiers")
driver.find_element_by_id("input-phone").send_keys("0541327288")
driver.find_element_by_id("input-promo").send_keys("1CS")
driver.find_element_by_id("input-section").send_keys("C")
driver.find_element_by_id("input-groupe").send_keys("08")

# Find submit button and click ! 

submitButton = driver.find_element_by_xpath('//*[@id="submit"]')
submitButton.click()

# Find list students button and click ! 

listLink = driver.find_element_by_xpath("//a[@href='/tables']")
listLink.click()

