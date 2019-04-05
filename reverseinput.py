# Name: Cw & Jpeezy
# Project: User inputs a string and flips it in reverse and more...?

##########
# GLOBAL #
##########

# Hopefully we don't have to use this section, but if you need some temp globals - declare them here

###########
# CLASSES #
###########

class _TEXT_MANAGER: # I like to use the "_" prefix to distinguish classes and modules, do you like this naming convention?

	# INIT #

	pass # Placeholder

	# FUNCTIONS #

	def reverseText(self, string):
		textReturn = ""

		# Create a decrementing for loop that starts from the full length - 1
		for i in range((int(len(string) - 1) ),-1 ,-1): # Iterate in reverse through string
			textReturn += string[i] # textrev = previous characters + new character

		# Return the backwards text
		return textReturn

	def alternateText(self, string):
		textReturn = ""
		c = 0

		# Loop through letters & alternate them
		for i in string:
			if c % 2 == 0: # We could do this without a counter, and probably should be, but im lazy right now so - !!FIX ME LATER!!
				textReturn += i.upper()
			else:
				textReturn += i.lower()

			c += 1

		# Return the alternated text
		return textReturn


########
# INIT #
########

_TEXT_MANAGER = _TEXT_MANAGER() # Create the text manager object

#############
# FUNCTIONS #
#############

pass # Placeholder

##########
# EVENTS #
##########

text = input('What would you like to reverse: ') # This is the string to be reversed taken from clipboard
type(text) # User inputs a string to be reversed

# Let's reverse THIS

textReversed = _TEXT_MANAGER.reverseText(text) # Reverse string variable

print(textReversed) # Print the reversed string in the terminal

text = "" # RESET

text = input('What would you like to alternate: ') # This is the string to be alternated taken from clipboard
type(text) # User inputs a string to be alternated

# Let's alternate THIS

textAlternate = _TEXT_MANAGER.alternateText(text) # Alternated string variable

print(textAlternate) # Print the alternated string in the terminal